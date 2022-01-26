import { ComponentFixture, TestBed } from '@angular/core/testing';

import { RubriquesAddComponent } from './rubriques-add.component';

describe('RubriquesAddComponent', () => {
  let component: RubriquesAddComponent;
  let fixture: ComponentFixture<RubriquesAddComponent>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      declarations: [ RubriquesAddComponent ]
    })
    .compileComponents();
  });

  beforeEach(() => {
    fixture = TestBed.createComponent(RubriquesAddComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
