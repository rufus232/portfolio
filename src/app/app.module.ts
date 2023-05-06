import { NgModule } from '@angular/core';
import { BrowserModule } from '@angular/platform-browser';

import { AppRoutingModule } from './app-routing.module';
import { AppComponent } from './app.component';
import { AccueilComponent } from './accueil/accueil.component';
import { CircleComponent } from './circle/circle.component';
import { AproposComponent } from './apropos/apropos.component';
import { NavbarComponent } from './navbar/navbar.component';
import { Circle2Component } from './circle2/circle2.component';
import { PeaceComponent } from './peace/peace.component';
import { PortfolioComponent } from './portfolio/portfolio.component';
import { PepsiComponent } from './pepsi/pepsi.component';
import { LeboncoinComponent } from './leboncoin/leboncoin.component';
import { PlanegameComponent } from './planegame/planegame.component';
import { GameComponent } from './game/game.component';
import { QcmComponent } from './qcm/qcm.component';
import { MeteoAppComponent } from './meteo-app/meteo-app.component';
import { EpreuvesComponent } from './epreuves/epreuves.component';
import { VeilleComponent } from './veille/veille.component';
import { E4Component } from './e4/e4.component';
import { ContactComponent } from './contact/contact.component';
import { MinpeaceComponent } from './minpeace/minpeace.component';
import { E5Component } from './e5/e5.component';
import { BtsSioComponent } from './bts-sio/bts-sio.component';
import { GestionBudgetComponent } from './gestion-budget/gestion-budget.component';
import { MapsComponent } from './maps/maps.component';

@NgModule({
  declarations: [
    AppComponent,
    AccueilComponent,
    CircleComponent,
    AproposComponent,
    NavbarComponent,
    Circle2Component,
    PeaceComponent,
    PortfolioComponent,
    PepsiComponent,
    LeboncoinComponent,
    PlanegameComponent,
    GameComponent,
    QcmComponent,
    MeteoAppComponent,
    EpreuvesComponent,
    VeilleComponent,
    E4Component,
    ContactComponent,
    MinpeaceComponent,
    E5Component,
    BtsSioComponent,
    GestionBudgetComponent,
    MapsComponent,
  ],
  imports: [
    BrowserModule,
    AppRoutingModule,
  ],
  providers: [],
  bootstrap: [AppComponent]
})
export class AppModule { }
