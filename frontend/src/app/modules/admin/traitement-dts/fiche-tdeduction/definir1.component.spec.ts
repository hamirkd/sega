import { ComponentFixture, TestBed } from '@angular/core/testing';

import { Definir1Component } from './definir1.component';

describe('Definir1Component', () => {
  let component: Definir1Component;
  let fixture: ComponentFixture<Definir1Component>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      declarations: [ Definir1Component ]
    })
    .compileComponents();
  });

  beforeEach(() => {
    fixture = TestBed.createComponent(Definir1Component);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
