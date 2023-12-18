import { HttpClient } from '@angular/common/http';
import { Injectable } from '@angular/core';


@Injectable({
  providedIn: 'root'
})
export class ApiService {

  constructor(
    public http: HttpClient
  ) { }


  addRecipe(data: any){
    return this.http.post('http://localhost\VisualStudioProjects\DrinkWebsite\backend\create.php',data);
  }
}
