class Alert extends HTMLElement {
  constructor({ type, message } = {}) {
    super();
    if (type !== undefined) {
      this.type = type;
    }
    this.close.bind(this);
  }

  connectedCallback() {
    this.message = this.getAttribute("message") ?? "";
    this.type = this.getAttribute("type") ?? "error";

    this.classList.add(
      ..."transition-opacity bg-error-200 opacity-100 dark:bg-error-200/30 p-sm flex justify-between rounded-md".split(
        " "
      )
    );
    this.innerHTML = `
      <div class="flex">
      <svg class="fill-error-500 h-md w-md mr-sm" viewBox="0 0 24 24" aria-hidden="true">
          <path d="M12,0C5.383,0,0,5.383,0,12s5.383,12,12,12s12-5.383,12-12S18.617,0,12,0z M13.645,5L13,14h-2l-0.608-9 H13.645z M12,20c-1.105,0-2-0.895-2-2c0-1.105,0.895-2,2-2c1.105,0,2,0.895,2,2C14,19.105,13.105,20,12,20z"></path>
      </svg>
      <p class="text-sm">${this.message}</p>
      </div>

      <button class="mr-sm self-center">
          <svg class="fill-contrast-900" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"><title>e-remove</title><g ><path d="M14.7,1.3c-0.4-0.4-1-0.4-1.4,0L8,6.6L2.7,1.3c-0.4-0.4-1-0.4-1.4,0s-0.4,1,0,1.4L6.6,8l-5.3,5.3 c-0.4,0.4-0.4,1,0,1.4C1.5,14.9,1.7,15,2,15s0.5-0.1,0.7-0.3L8,9.4l5.3,5.3c0.2,0.2,0.5,0.3,0.7,0.3s0.5-0.1,0.7-0.3 c0.4-0.4,0.4-1,0-1.4L9.4,8l5.3-5.3C15.1,2.3,15.1,1.7,14.7,1.3z"></path></g></svg>
      </button>
    `;
    this.querySelector("button").addEventListener("click", (e) => {
      e.preventDefault();
      this.close();
    });
  }

  close() {
    this.classList.add(`!opacity-0`);
    window.setTimeout(() => {
      this.parentElement.removeChild(this);
      this.dispatchEvent(new CustomEvent("close"));
    }, 150);
  }
}

customElements.define("dgagn-alert", Alert);
