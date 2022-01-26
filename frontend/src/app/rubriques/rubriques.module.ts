import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';
import { RubriquesComponent } from './rubriques.component';
import { ListComponent } from './list/list.component';
import { RouterModule, Routes } from '@angular/router';
import { NgbModule } from '@ng-bootstrap/ng-bootstrap';
import { RubriquesAddComponent } from './rubriques-add/rubriques-add.component';

const routes: Routes = [
  { path: '', component: ListComponent },
];

@NgModule({
  declarations: [RubriquesComponent, ListComponent, RubriquesAddComponent],
  imports: [
    CommonModule,
    NgbModule,
    RouterModule.forChild(routes),
  ]
})
export class RubriquesModule { }
