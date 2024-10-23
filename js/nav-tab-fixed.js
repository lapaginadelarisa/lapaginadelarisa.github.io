import { resaltaSiEstasEn } from "../lib/js/resaltaSiEstasEn.js"

export class NavTabFixed extends HTMLElement {

  connectedCallback() {
    this.classList.add("md-tab", "fixed");

    this.innerHTML = /* HTML */`
      <a ${resaltaSiEstasEn(["/index.html", "", "/"])} href="index.html">
        <span class="material-symbols-outlined">home</span>
        Inicio
      </a>
      <a ${resaltaSiEstasEn(["/render_cli.html"])} href="render_cli.html">
        <span class="material-symbols-outlined">list</span>
        Listado Cliente
      </a>
      <a ${resaltaSiEstasEn(["/render_srv.html"])} href="render_srv.html">
        <span class="material-symbols-outlined">list</span>
        Listado Servicio
      </a>
      <a ${resaltaSiEstasEn(["/ayuda.html"])} href="ayuda.html">
        <span class="material-symbols-outlined">help</span>
        Ayuda
      </a>
    `;
  }

}

customElements.define("nav-tab-fixed", NavTabFixed);
