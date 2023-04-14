import { ComponentFixture, TestBed } from '@angular/core/testing';

import { MinpeaceComponent } from './minpeace.component';

describe('MinpeaceComponent', () => {
  let component: MinpeaceComponent;
  let fixture: ComponentFixture<MinpeaceComponent>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      declarations: [ MinpeaceComponent ]
    })
    .compileComponents();

    fixture = TestBed.createComponent(MinpeaceComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
