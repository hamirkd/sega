import { ChangeDetectorRef, Component, OnInit } from '@angular/core';
 import { AddComponent } from '../add/add.component';
import { _DATA_SOCIETE } from './_data';
import {animate, state, style, transition, trigger} from '@angular/animations';
import { MatDialog } from '@angular/material/dialog';
import { FormGroup } from '@angular/forms';
import { ActivatedRoute, Router } from '@angular/router';


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

  displayedColumns: string[] = ['code', 'raison_sociale', 'adresse', 'ville','bp','telephone'];
  columnsToDisplay = ['code', 'raison_sociale', 'adresse', 'ville','bp','telephone','actions'];
  listes = _DATA_SOCIETE;
  dialogRef: any;

  dataSource = _DATA_SOCIETE;
  
  constructor(
    private _changeDetectorRef: ChangeDetectorRef,
    private _activatedRoute: ActivatedRoute,
    private _router: Router,
    private _matDialog: MatDialog, ) { }

  ngOnInit(): void {
  }
 

  add(): void
  {
      this.dialogRef = this._matDialog.open(AddComponent, {
          panelClass: '',
          data      : {
              societe:{},
              action: 'new'
          } 
      });

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
