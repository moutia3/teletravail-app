import { ApplicationConfig } from '@angular/core';
import { provideRouter } from '@angular/router';
import { routes } from './app.routes';
import { provideHttpClient, withInterceptors } from '@angular/common/http';
import { authInterceptor } from './auth.interceptor'; // Assurez-vous que le chemin est correct

export const appConfig: ApplicationConfig = {
  providers: [
    provideRouter(routes), // Configuration des routes
    provideHttpClient(
      withInterceptors([authInterceptor]) // Ajouter l'intercepteur HTTP
    ),
  ],
};