using System;
namespace Vehiculo
{
	abstract class VehiculoComponentes
	{
		public VehiculoComponentes()
		{
		}
	}
	class Estanque : VehiculoComponentes
	{
		int Capacidad;
		int Litros;
		public void mitadCombustible(int Litros,int Capacidad)
		{
			if (Litros > 10.5 % , Capacidad <= 50.0 %)
			{
				return ;
			}
		}
		public  void bajoCombustible()
		{
			if (Litros <= 10.5 %)
			{
				 return;
			}
            
		}

	}
	class Mezclador : VehiculoComponentes
	{
		 Tipos_Mezclador _tipo ;
	}
	enum Tipos_Mezclador
	{
		CARBURADOR,
		INYECTOR
	}

	class Rueda : VehiculoComponentes
	{
		Tipos_Rucubrimiento _tipo;
		int Durometro;
	public void durometro()
		{
          for(Durometro=100 ; Durometro<=180;Durometro++){
				Console.WriteLine(Durometro);
			}
		}
		
	}
         
	enum Tipos_Rucubrimiento
	{
		FENOL,
		HULE,
		POLIUTERANO
	}
	class Motor : VehiculoComponentes
	{
		int ID;
		Tipos_Motor _tipo;
		int Cilindrada;
	}
	enum Tipos_Motor
	{
		DOS_TIEMPOS,
		CUATRO_TIEMPOS
	}
}


