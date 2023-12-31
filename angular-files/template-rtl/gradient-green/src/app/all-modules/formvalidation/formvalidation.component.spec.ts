import { ComponentFixture, TestBed } from '@angular/core/testing';

import { FormvalidationComponent } from './formvalidation.component';

describe('FormvalidationComponent', () => {
  let component: FormvalidationComponent;
  let fixture: ComponentFixture<FormvalidationComponent>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      declarations: [ FormvalidationComponent ]
    })
    .compileComponents();
  });

  beforeEach(() => {
    fixture = TestBed.createComponent(FormvalidationComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
