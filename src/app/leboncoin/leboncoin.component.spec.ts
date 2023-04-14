import { ComponentFixture, TestBed } from '@angular/core/testing';

import { LeboncoinComponent } from './leboncoin.component';

describe('LeboncoinComponent', () => {
  let component: LeboncoinComponent;
  let fixture: ComponentFixture<LeboncoinComponent>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      declarations: [ LeboncoinComponent ]
    })
    .compileComponents();

    fixture = TestBed.createComponent(LeboncoinComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
