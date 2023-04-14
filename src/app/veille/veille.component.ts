import { Component, OnInit } from '@angular/core';

@Component({
  selector: 'app-veille',
  templateUrl: './veille.component.html',
  styleUrls: ['./veille.component.css']
})
export class VeilleComponent implements OnInit{
  ngOnInit() {
    const observer = new IntersectionObserver(( entries) => {
      entries.forEach((entry) => {
        console.log(entry)
        if (entry.isIntersecting) {
          entry.target.classList.add('show');

        }else{
          entry.target.classList.remove('show');
        }
      })
    });


    const hiddenElements = document.querySelectorAll('.hidden');
    hiddenElements.forEach((el) => observer.observe(el));
    
  }
}
