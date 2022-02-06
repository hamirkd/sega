import { ChangeDetectorRef, Component, OnInit } from '@angular/core';
 import { AddComponent } from '../add/add.component';
import {animate, state, style, transition, trigger} from '@angular/animations';
import { MatDialog } from '@angular/material/dialog';
import { FormGroup } from '@angular/forms';
import { ActivatedRoute, Router } from '@angular/router';
import { _DATA_SOCIETE } from '../../societes/list/_data';
import { _DATA } from './data';

@Component({
  selector: 'app-list',
  templateUrl: './list.component.html',
  styleUrls: ['./list.component.scss'],
  animations: [
    trigger('detailExpand', [
      state('collapsed', style({height: '0px', minHeight: '0'})),
      state('expanded', style({height: '*'})),
      transition('expanded <=> collapsed', animate('225ms cubic-bezier(0.4, 0.0, 0.2, 1)')),
    ]),
  ],
})
export class ListComponent implements OnInit {

  displayedColumns: string[] = ['position', 'matricule','cnss', 'nom', 'prenom','dateembauche','actions' ];
  dataSource = _DATA;
  dialogRef: any;
  data = _DATA_SOCIETE[0];
  
  
  constructor(
    private _changeDetectorRef: ChangeDetectorRef,
    private _activatedRoute: ActivatedRoute,
    private _router: Router,
    private _matDialog: MatDialog, ) { }

  ngOnInit(): void {
  }
 

  add(): void
  {
      this.dialogRef = this._matDialog.open(AddComponent );

      this.dialogRef.afterClosed()
          .subscribe((response: FormGroup) => {
              if ( !response )
              {
                  return;
              }

              // this._workFlowService.addWorkFlow(response.getRawValue());
          });
  }
   
}
