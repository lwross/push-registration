window.GoogleSamples = window.GoogleSamples || {};
window.GoogleSamples.Config = window.GoogleSamples.Config || {
  gcmAPIKey: '<?=getenv('GCM_API_KEY');?>'
};

console.log(window.GoogleSamples.Config);