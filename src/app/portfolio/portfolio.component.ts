import { Component, OnInit} from '@angular/core';

@Component({
  selector: 'app-portfolio',
  templateUrl: './portfolio.component.html',
  styleUrls: ['./portfolio.component.css']
})
export class PortfolioComponent implements OnInit{
  ngOnInit()  {
    
       const liens = document.querySelectorAll('.projet-link')
       const images:any = document.querySelectorAll('.projet-image')

       liens.forEach(lien => {
        lien.addEventListener("mouseover", ()=>{
          const classNames = lien.classList

          images.forEach((image:any) => {
            image.style.opacity = "0"

            classNames.forEach(classe => {
              if (image.classList.contains(classe)) {
                image.style.opacity = "1"
              }
            });
          });
        })
       });
  }
}
