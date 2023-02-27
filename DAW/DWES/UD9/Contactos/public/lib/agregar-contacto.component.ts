import { Component, OnInit } from '@angular/core';
import { Contacto } from '../../model/contacto';
import { ContactosService } from "../contactos.service"
import { MatSnackBar } from '@angular/material/snack-bar';
import { Router } from '@angular/router';



@Component({
  selector: 'app-agregar-contacto',
  templateUrl: './agregar-contacto.component.html',
  styleUrls: ['./agregar-contacto.component.css']
})
export class AgregarContactoComponent implements OnInit {

  constructor(private contactosService: ContactosService,
    private snackBar: MatSnackBar,
    private router: Router,
  ) { }

  ngOnInit() {
  }
  contactoModel = new Contacto(-1,"", "","");

  onSubmit() {
    this.contactosService.addContacto(this.contactoModel).subscribe(() => {
      this.snackBar.open('contacto guardado', undefined, {
        duration: 1500,
      });
      this.router.navigate(['/contactos/']);
    })
  }

}