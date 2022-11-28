import { ComponentFixture, TestBed } from '@angular/core/testing';

import { CompletarExternoComponent } from './completar-externo.component';

describe('CompletarExternoComponent', () => {
  let component: CompletarExternoComponent;
  let fixture: ComponentFixture<CompletarExternoComponent>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      declarations: [ CompletarExternoComponent ]
    })
    .compileComponents();

    fixture = TestBed.createComponent(CompletarExternoComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
