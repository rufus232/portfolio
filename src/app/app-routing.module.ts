import { NgModule } from '@angular/core';
import { RouterModule, Routes } from '@angular/router';
import { AccueilComponent } from './accueil/accueil.component';
import { AproposComponent } from './apropos/apropos.component';
import { CircleComponent } from './circle/circle.component';
import { Circle2Component } from './circle2/circle2.component';
import { ContactComponent } from './contact/contact.component';
import { EpreuvesComponent } from './epreuves/epreuves.component';
import { GameComponent } from './game/game.component';
import { LeboncoinComponent } from './leboncoin/leboncoin.component';
import { MeteoAppComponent } from './meteo-app/meteo-app.component';
import { NavbarComponent } from './navbar/navbar.component';
import { PeaceComponent } from './peace/peace.component';
import { PepsiComponent } from './pepsi/pepsi.component';
import { PlanegameComponent } from './planegame/planegame.component';
import { PortfolioComponent } from './portfolio/portfolio.component';
import { QcmComponent } from './qcm/qcm.component';
import { VeilleComponent } from './veille/veille.component';
import { E4Component } from './e4/e4.component';
import { MinpeaceComponent } from './minpeace/minpeace.component';
import { E5Component } from './e5/e5.component';
import { BtsSioComponent } from './bts-sio/bts-sio.component';


const routes: Routes = [
  {path: '', redirectTo: 'accueil', pathMatch: "full"},
  {path: "accueil", component: AccueilComponent },
  {path: "circle", component: CircleComponent },
  {path: "circle2", component: Circle2Component },
  {path: "apropos", component: AproposComponent },
  {path: "navbar", component: NavbarComponent },
  {path: "peace", component: PeaceComponent },
  {path: "minpeace", component: MinpeaceComponent },
  {path: "pepsi", component: PepsiComponent },
  {path: "qcm", component: QcmComponent },
  {path: "leboncoin", component: LeboncoinComponent },
  {path: "planegame", component: PlanegameComponent },
  {path: "game", component: GameComponent },
  {path: "epreuves", component: EpreuvesComponent },
  {path: "veille", component: VeilleComponent },
  {path: "e4", component: E4Component },
  {path: "e5", component: E5Component },
  {path: "bts-sio", component: BtsSioComponent },
  {path: "meteo_App", component: MeteoAppComponent },
  {path: "contact", component: ContactComponent },
  {path: "portfolio", component: PortfolioComponent },
];


@NgModule({
  imports: [RouterModule.forRoot(routes)],
  exports: [RouterModule]
})
export class AppRoutingModule { }
