import { ComponentFixture, TestBed } from '@angular/core/testing';

import { FicheConjointComponent } from './fiche-conjoint.component';

describe('FicheConjointComponent', () => {
  let component: FicheConjointComponent;
  let fixture: ComponentFixture<FicheConjointComponent>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      declarations: [ FicheConjointComponent ]
    })
    .compileComponents();
  });

  beforeEach(() => {
    fixture = TestBed.createComponent(FicheConjointComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
