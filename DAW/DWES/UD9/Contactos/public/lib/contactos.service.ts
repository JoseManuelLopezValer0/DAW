import { Injectable } from '@angular/core';
import { HttpClient, HttpParams } from '@angular/common/http';
import { HttpHeaders } from '@angular/common/http';
import { environment } from 'src/environments/environment';

import { Observable } from 'rxjs';
import { catchError } from 'rxjs/operators';

import { Contacto } from '../model/contacto';
import { HttpErrorHandler, HandleError } from './http-error-handler.service';

const httpOptions = {
  headers: new HttpHeaders({
    'Content-Type':  'application/json',
    Authorization: 'my-auth-token'
  })
};

@Injectable()
export class ContactosService {
  baseUrl = environment.baseUrl
  private handleError: HandleError;

  constructor(
    private http: HttpClient,
    httpErrorHandler: HttpErrorHandler) {
    this.handleError = httpErrorHandler.createHandleError('ContactosService');
  }

  /** GET heroes from the server */
  getContactos(): Observable<Contacto[]> {
   
    return this.http.get<Contacto[]>(`${this.baseUrl}contactos/`)
      .pipe(
        catchError(this.handleError('getContactos', []))
      );
  }

  addContacto(contacto: Contacto) {
  
    return this.http.post(`${this.baseUrl}contactos/`, contacto);
  }

  deleteContacto(id:any) {

    return this.http.delete(`${this.baseUrl}contactos/${id}`);
  }



  getContacto(id:any): Observable <any> {
   
    return this.http.get<Contacto>(`${this.baseUrl}contactos/${id}`)
      .pipe(
        catchError(this.handleError('getContacto',[]))
        );
  }




  updateContacto(contacto: Contacto) {
    return this.http.put(`${this.baseUrl}contactos/${contacto.id}`, contacto);
  }
}