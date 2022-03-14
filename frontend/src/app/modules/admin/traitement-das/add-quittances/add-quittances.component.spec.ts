import { ComponentFixture, TestBed } from '@angular/core/testing';

import { AddQuittanceComponent } from './add-quittances.component';

describe('AddQuittanceComponent', () => {
  let component: AddQuittanceComponent;
  let fixture: ComponentFixture<AddQuittanceComponent>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      declarations: [ AddQuittanceComponent ]
    })
    .compileComponents();
  });

  beforeEach(() => {
    fixture = TestBed.createComponent(AddQuittanceComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
