'use strict';

document.addEventListener(
    'DOMContentLoaded',
    function () {
        const elementsToToggle = [
            [".frame-collapsemobile", "(max-width: 768px)"],
            [".frame-collapse", null],
            [".accordion", null]
        ];

        class Accordion {
            constructor(accordionEl, windowSize) {
                this.rootEl = accordionEl;
                this.windowSize = windowSize;
                this.buttonEl = this.rootEl.querySelector('button[aria-expanded]');
                this.contentEl = this.rootEl.querySelector("div");
                this._eventForHeaderClick = this.onButtonClick.bind(this);
                this.open = this.buttonEl.getAttribute('aria-expanded') === 'true';
                this.onButtonClick();
                if (this.windowSize === null) {
                    // Add open/close click EventListener to all elements without media size
                    this.buttonEl.addEventListener('click', this.onButtonClick.bind(this), false);
                } else {
                    this.handleToggleOnResize();
                    window.addEventListener('resize', this.handleToggleOnResize.bind(this), true);
                }
            }

            handleToggleOnResize() {
                // First of all remove all click EventListeners
                if (typeof this.buttonEl.removeEventListener === "function") {
                    this.buttonEl.removeEventListener('click', this._eventForHeaderClick, false);
                }

                if (window.matchMedia(this.windowSize).matches) {
                    // If window size is below match, add click EventListener
                    this.buttonEl.addEventListener('click', this._eventForHeaderClick, false);
                } else {
                    // If it does not match, just open the content element
                    this.toggle(true);
                }
            }

            onButtonClick() {
                this.toggle(!this.open);
            }

            toggle(open) {
                // don't do anything if the open state doesn't change
                if (open === this.open) {
                    return;
                }

                // update the internal state
                this.open = open;

                // handle DOM updates
                this.buttonEl.setAttribute('aria-expanded', `${open}`);
                if (open) {
                    this.contentEl.removeAttribute('hidden');
                } else {
                    this.contentEl.setAttribute('hidden', '');
                }
            }

            // Add public open and close methods for convenience
            open() {
                this.toggle(true);
            }

            close() {
                this.toggle(false);
            }
        }

        elementsToToggle.forEach(element => {
            const accordions = document.querySelectorAll(element[0]);
            accordions.forEach((accordionEl) => {
                new Accordion(accordionEl, element[1]);
            });
        });
    },
    false
);
