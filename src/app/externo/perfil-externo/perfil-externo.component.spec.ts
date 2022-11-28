import { ComponentFixture, TestBed } from '@angular/core/testing';

import { PerfilExternoComponent } from './perfil-externo.component';

describe('PerfilExternoComponent', () => {
  let component: PerfilExternoComponent;
  let fixture: ComponentFixture<PerfilExternoComponent>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      declarations: [ PerfilExternoComponent ]
    })
    .compileComponents();

    fixture = TestBed.createComponent(PerfilExternoComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
