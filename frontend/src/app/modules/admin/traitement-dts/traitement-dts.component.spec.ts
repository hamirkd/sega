import { ComponentFixture, TestBed } from '@angular/core/testing';

import { TraitementDTSComponent } from './traitement-dts.component';

describe('TraitementDTSComponent', () => {
  let component: TraitementDTSComponent;
  let fixture: ComponentFixture<TraitementDTSComponent>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      declarations: [ TraitementDTSComponent ]
    })
    .compileComponents();
  });

  beforeEach(() => {
    fixture = TestBed.createComponent(TraitementDTSComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
