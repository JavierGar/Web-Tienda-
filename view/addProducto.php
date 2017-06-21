



<form id=registro action="controllerAddProducto.php" method="post" enctype="multipart/form-data">
  <label for="nom">Nombre:</label><br />
  <input type="text" name="nom" id="nom" required pattern="[A-Za-Z0-9]{1,30}"/><br />
  <label for="nom">Precio:</label><br />
  <input type="int" name="precio" id="precio" required pattern="[0-9]{1,30}"/><br />
  <select name="category">
   <option value="1">Figuras</option>
   <option value="2">Nendoroids</option>
   <option value="3">Mechas</option>
 </select>  <br />
  <textarea name="message" rows="10" cols="30" required pattern="[A-Za-Z0-9]">Descripción</textarea>
  <br />
    Select image to upload:
    <input type="file" name="fileToUpload" id="fileToUpload" >
    <button type="submit"  name="upload">Upload Image</button>
</form>
