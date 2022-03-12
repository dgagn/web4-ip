require("./bootstrap");
require("./Alert");
require("./ThemeSwitcher");
require("./TestComponent");

import Turbolinks from "turbolinks";

/**
 * Evite le chargement ajax lors de l'utilisation d'une ancre
 *
 * cf : https://github.com/turbolinks/turbolinks/issues/75
 */
document.addEventListener("turbolinks:click", (e) => {
  const anchorElement = e.target;
  const isSamePageAnchor =
    anchorElement.hash &&
    anchorElement.origin === window.location.origin &&
    anchorElement.pathname === window.location.pathname;

  if (isSamePageAnchor) {
    Turbolinks.controller.pushHistoryWithLocationAndRestorationIdentifier(
      e.data.url,
      Turbolinks.uuid()
    );
    e.preventDefault();
    window.dispatchEvent(new Event("hashchange"));
  }
});

//Turbolinks.start();
