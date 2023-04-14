import { ComponentFixture, TestBed } from '@angular/core/testing';

import { PlanegameComponent } from './planegame.component';

describe('PlanegameComponent', () => {
  let component: PlanegameComponent;
  let fixture: ComponentFixture<PlanegameComponent>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      declarations: [ PlanegameComponent ]
    })
    .compileComponents();

    fixture = TestBed.createComponent(PlanegameComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
