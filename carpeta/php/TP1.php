<?php
    include '../header.php';
?>
<form action="" method="post">
    <table class="nnn">
        <tr>
            <td colspan="3">Datos Personales</td>
        </tr>
        <tr>
            <td>
                DNI:
            </td>
            <td colspan="2">
                <input type="number" name="dni">    
            </td>                
        </tr>
        <tr>
            <td>
                Apellido:
            </td>
            <td colspan="2">
                <input type="text" name="apelido">
            </td>                                                                            
        </tr>
        <tr>
            <td>
                Nombres:
            </td>
            <td colspan="2">
                <input type="text" name="nombres">
            </td>                                                                                
        </tr>
        <tr>
            <td colspan="3">
                Sexo:
            </td>
        </tr>
        <tr>
            <td align="right">
                M
                <input type="radio" name="sexo" value="M">
            </td>
            <td align="right">
                F
                <input type="radio" name="sexo" value="F">
            </td>
            <td align="center">
                Nb
                <input type="radio" name="sexo" value="Nb">
            </td>
        </tr>
        <tr>
            <td colspan="3">
                Deporte:
            </td>
        </tr>
        <tr>
            <td>
                Futball:
            </td>
            <td colspan="2" align="center">
                <input type="checkbox" name="deporte">    
            </td>    
        </tr>
        <tr>
            <td>
                Voley:
            </td>
            <td colspan="2" align="center">
                <input type="checkbox" name="deporte">
            </td>
        </tr>
        <tr>
            <td>
                Basketball:
            </td>
            <td colspan="2" align="center">
                <input type="checkbox" name="deporte">
            </td>
        </tr>
        <tr>
            <td colspan="3">
                Opinion:
            </td>
        </tr>
        <tr>
            <td colspan="3">
                <textarea name="opinion" cols="32" rows="5"></textarea>
            </td>
        </tr>
        <tr>
            <td colspan="3" align="center">
                <input type="submit">
                <input type="reset" value="Borrar">
            </td>
        </tr>
    </table>
</form>
<?php
    include '../footer.php';
?>