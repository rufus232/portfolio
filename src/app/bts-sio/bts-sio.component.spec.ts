import { ComponentFixture, TestBed } from '@angular/core/testing';

import { BtsSioComponent } from './bts-sio.component';

describe('BtsSioComponent', () => {
  let component: BtsSioComponent;
  let fixture: ComponentFixture<BtsSioComponent>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      declarations: [ BtsSioComponent ]
    })
    .compileComponents();

    fixture = TestBed.createComponent(BtsSioComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
