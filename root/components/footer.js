/*declaring customer header */
class Footer extends HTMLElement {
    constructor() {
      super();
    }

    connectedCallback() {
        this.innerHTML = `
        <style>
        footer {
          position: fixed;
          left: 0;
          bottom: 0;
          width: 100%;
          background-color: rgb(0, 230, 230);
          color: white;
          text-align: center;
        }

        a {
          display: block;
          color: white;
          text-align: center;
          padding: 14px 16px;
          text-decoration: none;
          float: left;
        }
        
      </style>
      <footer>
        <nav>
          <a href="#">Our Privacy Policy</a> 
          <a href="#">Contact Us</a> 
          <a href="#">Our Team</a> 
          <a href="#">Terms of Use</a>
        </nav>
        <p class="split">Ace Training made by LL SD NW</p>
      </footer>
        `;
      }
  }

  /*registering header*/
  customElements.define('footer-component', Footer);
  