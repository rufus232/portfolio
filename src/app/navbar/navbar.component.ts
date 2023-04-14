import { Component, OnInit } from '@angular/core';

@Component({
  selector: 'app-navbar',
  templateUrl: './navbar.component.html',
  styleUrls: ['./navbar.component.css']
})
export class NavbarComponent implements OnInit {
  constructor(){
  
  }

  ngOnInit()  {
      const open = document.querySelector(".mob-open");
       const close = document.querySelector(".mob-close");
       const wrapper = document.querySelector(".mob-wrapper")?.classList;
      

       open?.addEventListener("click", () => {
        wrapper?.toggle("opened");
        wrapper?.toggle("close");
       });

       close?.addEventListener("click", () => {
        wrapper?.toggle("opened");
        wrapper?.toggle("close");
       });
       
  }
}
