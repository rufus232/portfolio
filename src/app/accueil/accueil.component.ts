import { Component, OnInit } from '@angular/core';


@Component({
  selector: 'app-accueil',
  templateUrl: './accueil.component.html',
  styleUrls: ['./accueil.component.css']
})
export class AccueilComponent implements OnInit{
   
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
