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
          background-color: hotpink;
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

        hr {
          width: 50%;
        }
        
      </style>
      <footer>
        <p>Hi I'm a footer :) i'm reuseable now!</p><hr>
        <nav>
          <a href="#">Our Privacy Policy(working on it)</a> 
          <a href="#">Contact Us</a> 
          <a href="#">Our Team</a> 
          <a href="#">Terms of Use</a>
        </nav>
        <p>Ace Training Inc</p> 
      </footer>
        `;
      }
  }

  /*registering header*/
  customElements.define('footer-component', Footer);
  