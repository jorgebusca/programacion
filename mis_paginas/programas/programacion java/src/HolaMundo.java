import java.util.Locale;

public class HolaMundo {
    public static void main(String[] args) {
        System.out.println("Hola Mundo con Java");
        String saludar="Hola Mundo programo con Java";

        System.out.println("saludar = " + saludar.toUpperCase(Locale.ROOT));

        int numero=10;

        System.out.println(numero);

        String nombre="Jorge Alberto";
        String apellido="Busca";
        int edad=56;

        System.out.println(nombre + ' ' + apellido + " Tiene Años " + edad);

        boolean valor = true;
        var numero2=5;

        if (valor){
            System.out.println("numero2 = " + numero2);
            numero2=20;
        }



    }
}
