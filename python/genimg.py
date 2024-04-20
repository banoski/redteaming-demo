import argparse
from PIL import Image
import os
import random
import logging

#logging for debuggings
logging.basicConfig(filename='genimg.log', level=logging.INFO)
logging.info('Script started')

def generate_image(size, intensity_range, color=False, open_image=False, filename=None):
    if color:
        output_image = Image.new('RGB', (size, size))
        for x in range(size):
            for y in range(size):
                r = random.randint(0, 255)
                g = random.randint(0, 255)
                b = random.randint(0, 255)
                output_image.putpixel((x, y), (r, g, b))
    else:
        output_image = Image.new('L', (size, size))
        for x in range(size):
            for y in range(size):
                intensity = random.randint(*intensity_range)
                output_image.putpixel((x, y), intensity)
    
    if filename:
        if not filename.lower().endswith(('.png', '.jpg', '.jpeg')):
            filename += '.png'  # Default to PNG format if no extension provided
        output_filename = filename
    else:
        output_filename = f'output.png' #f'output_{size}x{size}.png'
    output_path = os.path.join('../../assets/generated-images', output_filename)  # Updated path

    # Check if end folder exists or create it
    if not os.path.exists('../../assets/generated-images') or not os.path.isdir('../../assets/generated-images'):
        os.makedirs('../../assets/generated-images')

    logging.info(f'Saving image as {output_path}')

    output_image.save(output_path)
    logging.info(f'Image saved as {output_path}')
    print(f"Image saved as {output_path}")
    if open_image:
        output_image.show()

if __name__ == "__main__":
    parser = argparse.ArgumentParser(description='Generate an image of specified size with grayscale or random colors.')
    parser.add_argument('-s', '--size', metavar='size', type=int, default=256, help='Size of the image (default: 256)')
    group = parser.add_mutually_exclusive_group()
    group.add_argument('-i', '--intensity', metavar='intensity', type=float, nargs=2, default=[90.0, 95.0], help='Range of intensity for pixels in percentage (default: 90.0 95.0)')
    group.add_argument('-c', '--color', action='store_true', help='Generate image with random colors')
    parser.add_argument('-o', '--open-image', action='store_true', help='Open the generated image after saving')
    parser.add_argument('-n', '--filename', metavar='filename', type=str, help='Custom filename for the generated image')
    args = parser.parse_args()

    if args.color:
        generate_image(args.size, None, color=True, open_image=args.open_image, filename=args.filename)
    else:
        generate_image(args.size, [int(intensity_percent / 100.0 * 255) for intensity_percent in args.intensity], open_image=args.open_image, filename=args.filename)
