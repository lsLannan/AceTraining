/*declaring customer navbar for tutor pages */
class Tutornav extends HTMLElement {
    constructor() {
      super();
    }

    connectedCallback() {
        this.innerHTML = `
          <div class="topnav">
                <!--<a href="#"><img src="ace-logo.png" alt="logo"></a>-->
                <a href="tutor-home.html">HOME</a>
                <a class="active" href="tutor-courses.html">COURSES</a>
                <a href="tutor-enroll.html">ENROL</a>
                <a href="#records">RECORDS</a>
                <!--<a href="#login" class="split">LOG IN</a>-->
            </div>
        `;
      }
  }

  /*registering*/
  customElements.define('tutor-navbar-component', Tutornav);
  