import { Injectable } from '@angular/core';
import { Societe } from 'app/models/societe.model';
import { _DATA_SOCIETE } from 'app/modules/admin/societes/list/_data';

@Injectable({
  providedIn: 'root'
})
export class SocieteService {

  constructor() { }

  getAll(){
    return _DATA_SOCIETE;
  }

  set activeSociete(societe:Societe){
    localStorage.setItem("activeSociete",JSON.stringify(societe));
  }
  
  get activeSociete(){
    if(!localStorage.getItem("activeSociete")) return new Societe({});
    return JSON.parse(localStorage.getItem("activeSociete"));
  }

}
