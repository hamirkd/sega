import { Injectable } from '@angular/core';
import { Rubrique } from 'app/models/rubrique.model';
import { _DATA_RUBRIQUES } from '../data-test/data-rubriques';
import { SocieteService } from './societe.service';

@Injectable({
  providedIn: 'root'
})
export class RubriqueService {

  constructor(private societeService:SocieteService) { }

  getAll():Rubrique[]{
    const societe_id= this.societeService.activeSociete.id;
    return _DATA_RUBRIQUES.filter(r=>r.societe_id==societe_id);
  }
  add(rubrique:Rubrique){
    rubrique.id=(new Date().getTime());
    rubrique.societe_id = this.societeService.activeSociete.id;
    _DATA_RUBRIQUES.push(rubrique);
  }

  update(rubrique:Rubrique){
    const index = _DATA_RUBRIQUES.findIndex(r=>r.id==rubrique.id);
    // _DATA_RUBRIQUES.splice(index,1)
    console.log(rubrique)
    _DATA_RUBRIQUES.push(rubrique);
  }
  
}
