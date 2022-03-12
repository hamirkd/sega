import { ComponentFixture, TestBed } from '@angular/core/testing';

import { FicheSignataireComponent } from './fiche-signataire.component';

describe('FicheSignataireComponent', () => {
  let component: FicheSignataireComponent;
  let fixture: ComponentFixture<FicheSignataireComponent>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      declarations: [ FicheSignataireComponent ]
    })
    .compileComponents();
  });

  beforeEach(() => {
    fixture = TestBed.createComponent(FicheSignataireComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
