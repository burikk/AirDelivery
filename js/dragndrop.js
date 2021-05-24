$(function(){
  $('.input-images').imageUploader({
    extensions: ['.jpg', '.png', '.doc', '.docx', '.pdf'],
    mimes: ['image/jpeg', 'image/png', 'application/msword', 'application/vnd.openxmlformats-officedocument.wordprocessingml.document', 'application/pdf'],
    maxSize: 15 * 1024 * 1024,
    maxFiles: undefined,
    label:'Drag & Drop files here or click to browse'
  });
});
