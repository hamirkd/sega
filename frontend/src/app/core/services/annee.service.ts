import { Injectable } from '@angular/core';

@Injectable({
  providedIn: 'root'
})
export class AnneeService {

  constructor() { }
  

  getAll(){
    return [2020,2021,2022,2023];
  }

  

  set activeAnnee(annee: number) {
    localStorage.setItem('activeAnnee', JSON.stringify(annee));
}

get activeAnnee() {
    if (!localStorage.getItem('activeAnnee')) return new Date().getFullYear();
    return JSON.parse(localStorage.getItem('activeAnnee'));
}
}
