import { Injectable } from '@angular/core';
import { Salarie } from 'app/models/salarie.model';
import { Societe } from 'app/models/societe.model';
import { _DATA_SALARIES } from '../data-test/data-salaries';
import { SocieteService } from './societe.service';

@Injectable({
  providedIn: 'root'
})
export class SalarieService {

  constructor(private _societeService:SocieteService) { }

  add(societe:Societe){

  }
  getAll():Salarie[]{
    const societe_id = this._societeService.activeSociete.id
    return _DATA_SALARIES.filter(s=>s.societe_id==societe_id);
  }
}
