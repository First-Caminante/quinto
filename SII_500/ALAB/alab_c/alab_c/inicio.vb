Imports CONTROLADOR


Public Class inicio




    Private Sub inicio_Load(sender As Object, e As EventArgs) Handles MyBase.Load

    End Sub

    Private Sub Label1_Click(sender As Object, e As EventArgs) Handles Label1.Click

    End Sub

    Private Sub Button1_Click(sender As Object, e As EventArgs) Handles Button1.Click
        Dim nombreUsuario As String = txtNombreUsuario.Text ' Asumiendo que txtNombreUsuario es el control de texto para el nombre de usuario
        Dim contrasenia As String = txtContrasenia.Text ' Asumiendo que txtContrasenia es el control de texto para la contraseña

        ' Crear una instancia de la clase Conexion
        Dim conexion As New connexion()

        ' Llamar a la función Validar
        If conexion.Validar(nombreUsuario, contrasenia) Then
            MessageBox.Show("Usuario validado correctamente", "Éxito", MessageBoxButtons.OK, MessageBoxIcon.Information)
            ' Aquí puedes redirigir al usuario a la siguiente pantalla o realizar alguna otra acción
        Else
            MessageBox.Show("Nombre de usuario o contraseña incorrectos", "Error", MessageBoxButtons.OK, MessageBoxIcon.Error)
        End If
    End Sub
End Class
