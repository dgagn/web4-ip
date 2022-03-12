import { cookie } from "./cookie";

class ThemeSwitcher extends HTMLElement {
  connectedCallback() {
    this.innerHTML = `
      <input type="checkbox">
    `;
    const input = this.querySelector("input");
    input.addEventListener("change", (e) => {
      const theme = e.currentTarget.checked ? "dark" : "light";
      if (theme === "dark") document.documentElement.classList.add("dark");
      else document.documentElement.classList.remove("dark");

      cookie("theme", theme, { expires: 7 });
    });

    input.checked = document.documentElement.classList.contains("dark");
  }
}

customElements.define("theme-switcher", ThemeSwitcher);
