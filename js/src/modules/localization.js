export default function getLocalization(stringKey) {
  if (typeof window.Ptv_api_test_screenReaderText === 'undefined' || typeof window.Ptv_api_test_screenReaderText[stringKey] === 'undefined') {
    // eslint-disable-next-line no-console
    console.error(`Missing translation for ${stringKey}`);
    return '';
  }
  return window.Ptv_api_test_screenReaderText[stringKey];
}
