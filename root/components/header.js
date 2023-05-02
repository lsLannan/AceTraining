/*declaring customer header */
class Header extends HTMLElement {
    constructor() {
      super();
    }

    connectedCallback() {
        this.innerHTML = `
          <header>
            <h1>Header</h1>
          </header>
        `;
      }
  }

  /*registering header*/
  customElements.define('header-component', Header);
  