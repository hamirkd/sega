import { ComponentFixture, TestBed } from '@angular/core/testing';

import { TraitementRetenueComponent } from './traitement-retenue.component';

describe('SalariesComponent', () => {
  let component: TraitementRetenueComponent;
  let fixture: ComponentFixture<TraitementRetenueComponent>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      declarations: [ TraitementRetenueComponent ]
    })
    .compileComponents();
  });

  beforeEach(() => {
    fixture = TestBed.createComponent(TraitementRetenueComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
