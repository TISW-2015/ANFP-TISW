<?php

class Utils {

        // Método estático para no tener que crear una instancia
		// Recibe un string con un año y un id y retorna el String con el mayor año
        public static function mayor($model){
			$mayor=$model[0];
			foreach ($model as $value)
				if($value[0]>$mayor[0])$mayor=$value;
			return $mayor;
		}
        
}