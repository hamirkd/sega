import { ComponentFixture, TestBed } from '@angular/core/testing';

import { TraitementDASComponent } from './traitement-das.component';

describe('TraitementDASComponent', () => {
  let component: TraitementDASComponent;
  let fixture: ComponentFixture<TraitementDASComponent>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      declarations: [ TraitementDASComponent ]
    })
    .compileComponents();
  });

  beforeEach(() => {
    fixture = TestBed.createComponent(TraitementDASComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
