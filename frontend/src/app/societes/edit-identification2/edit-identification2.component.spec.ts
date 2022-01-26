import { ComponentFixture, TestBed } from '@angular/core/testing';

import { EditIdentification2Component } from './edit-identification2.component';

describe('EditIdentification2Component', () => {
  let component: EditIdentification2Component;
  let fixture: ComponentFixture<EditIdentification2Component>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      declarations: [ EditIdentification2Component ]
    })
    .compileComponents();
  });

  beforeEach(() => {
    fixture = TestBed.createComponent(EditIdentification2Component);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
