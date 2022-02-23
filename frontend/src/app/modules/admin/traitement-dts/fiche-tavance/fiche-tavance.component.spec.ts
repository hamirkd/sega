import { ComponentFixture, TestBed } from '@angular/core/testing';

import { FicheTavanceComponent } from './fiche-tavance.component';

describe('FicheTavanceComponent', () => {
  let component: FicheTavanceComponent;
  let fixture: ComponentFixture<FicheTavanceComponent>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      declarations: [ FicheTavanceComponent ]
    })
    .compileComponents();
  });

  beforeEach(() => {
    fixture = TestBed.createComponent(FicheTavanceComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
